<script setup>
// import ref functionality
import { ref } from "vue";
import { generateRecaptchaToken } from "../../modules/Recaptcha.js";

// values passed into the component
const props = defineProps(["csrf", "origin"]);

// ref allows these fields to be bound to an input and updated dynamically
const name = ref("");
const number = ref("");
const email = ref("");

let successful_submission = ref(false);
let unsuccessful_submission = ref(false);

async function submit(event)
{
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
  .then((response) =>
  {
    if (response.status === 200)
    {
      successful_submission.value = true;

      name.value = "";
      number.value = "";
      email.value = "";
    }
    else
    {
      console.error("Panic at the disco:", response);
      unsuccessful_submission.value = true;
    }
  })
  // catch any errors
  .catch((error) =>
  {
    console.error("Panic at the disco:", error);
    unsuccessful_submission.value = true;
  });
}
</script>

<template>
  <div>
    <div v-if="successful_submission"
      class="mx-auto mb-10 max-w-3xl rounded-lg bg-green-50 p-4 text-center text-sm text-green-700"
      role="alert">
      <span class="font-semibold">Success!</span> Thank you for your submission,
      we will be in touch as soon as possible.
    </div>

    <div v-if="unsuccessful_submission"
      class="mx-auto mb-10 max-w-3xl rounded-lg bg-red-50 p-4 text-center text-sm text-red-700"
      role="alert">
      There has been an <span class="font-semibold">error</span> uploading your
      submission, please get in touch if this issue persists.
    </div>

    <form
      id="contact_form"
      method="post"
      action="/!/forms/forms"
      @submit.prevent="submit"
      class="flex flex-col flex-wrap justify-center space-y-4 xl:space-y-0 xl:space-x-4 xl:flex-row"
    >
      <div class="field">
        <label for="name" class="pr-4">Name: </label>
        <input type="text" name="name" id="name" v-model="name" autocomplete="name" required />
      </div>

      <div class="field">
        <label for="number" class="pr-4">Number: </label>
        <input type="text" name="number" id="number" v-model="number" autocomplete="tel" required
        />
      </div>

      <div class="field">
        <label for="email" class="pr-4">Email: </label>
        <input type="email" name="email" id="email" v-model="email" autocomplete="email" required />
      </div>

      <input name="origin" class="hidden" :value="props.origin" />

      <button
        type="submit"
        class="px-10 py-3 text-center text-white bg-primary"
      >
        Submit
      </button>
    </form>
  </div>
</template>
