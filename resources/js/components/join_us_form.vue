<script setup>
// import ref functionality
import { ref } from "vue";
import { generateRecaptchaToken } from "../modules/Recaptcha.js";

// values passed into the component
const props = defineProps(["csrf", "origin", "filetermsandconditions"]);

// ref allows these fields to be bound to an input and updated dynamically
const name = ref("");
const number = ref("");
const email = ref("");
const introduction = ref("");
const headshotFile = ref("");
const csvFile = ref("");

let successful_submission = false;
let unsuccessful_submission = false;

async function submit(event) {
  let form = event.target;
  let data = new FormData(form);

  let recaptchaToken = await generateRecaptchaToken();
  data.append("token", recaptchaToken);

  fetch(form.action, {
    method: form.method,
    body: data,
    headers: {
      "X-CSRF-TOKEN": props.csrf,
      "X-Requested-With": "XMLHttpRequest",
    },
  })
    // promise fulfilled
    .then((response) => {
      if (response.status === 200) {
        successful_submission = true;

        name.value = "";
        number.value = "";
        email.value = "";
        introduction.value = "";
        headshotFile.value = "";
      } else {
        console.error("Panic at the disco:", response);
        unsuccessful_submission = true;
      }
    })
    // catch any errors
    .catch((error) => {
      console.error("Panic at the disco:", error);
      unsuccessful_submission = true;
    });
}
</script>

<template>
  <form
    class="flex flex-col gap-4"
    method="post"
    action="/!/forms/forms"
    @submit.prevent="submit"
  >
    <div class="flex flex-col items-stretch justify-start field">
      <label for="name" class="mb-2">Your Name:*</label>
      <input type="text" name="name" id="name" required v-model="name" />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="number" class="mb-2">Your Number:</label>
      <input type="text" name="number" id="number" v-model="number" />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="email" class="mb-2">Your Email Address:*</label>
      <input type="email" name="email" id="email" required v-model="email" />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="introduction" class="mb-2">Introduce Yourself:</label>
      <textarea
        name="introduction"
        id="introduction"
        class="h-32"
        style="resize: none"
        v-model="introduction"
      ></textarea>
    </div>

    <div class="flex justify-between gap-4">
      <div>
        <p>Upload Headshot</p>
        <input
          type="file"
          src="img_submit.gif"
          name="headshot"
          width="48"
          height="48"
          :model="headshotFile"
          required
        />
      </div>
      <div>
        <p>CSV</p>
        <input
          type="file"
          src="img_submit.gif"
          name="csv"
          width="48"
          height="48"
          :model="csvFile"
          required
        />
      </div>
    </div>

    <input name="origin" class="hidden" :value="props.origin" />

    <div class="flex flex-col gap-4">
      <a class="cursor-pointer" :href="props.filetermsandconditions" download>
        <strong class="underline underline-offset-2"
          >View Terms and conditions</strong
        >
      </a>
      <div class="flex content-center">
        <input
          type="checkbox"
          id="terms"
          name="terms"
          value="Agreed"
          class="mr-4 cursor-pointer"
          required
        />
        <label for="terms" class="cursor-pointer"
          >I have read the terms and conditions</label
        >
        <br />
      </div>

      <button class="my-4 self-start p-4 text-white bg-primary">Submit</button>
    </div>
  </form>
</template>
