<script setup>
// import ref functionality
import { ref } from "vue";
import { generateRecaptchaToken } from "../../modules/Recaptcha.js";

// values passed into the component
const props = defineProps(["csrf", "origin", "tcs"]);

// ref allows these fields to be bound to an input and updated dynamically
const name = ref("");
const number = ref("");
const email = ref("");
const introduction = ref("");
const headshotFileName = ref("No file chosen");
const csvFileName = ref("No file chosen");

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
    headers:
    {
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
      introduction.value = "";
      headshotFileName.value = "No file chosen";
      csvFileName.value = "No file chosen";
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

function updateFilePreview(event)
{
  console.log(event);
  let upload_sibling = event.target.previousElementSibling;
  upload_sibling.innerText = event.target.files[0].name;
}
</script>

<template>
  <form
    class="flex flex-col gap-4"
    method="post"
    action="/!/forms/forms"
    @submit.prevent="submit">

    <div v-if="successful_submission"
         class="w-full mb-2 rounded-lg bg-green-50 p-4 text-center text-sm text-green-700"
         role="alert">
      <span class="font-semibold">Success!</span> Thank you for your submission,
      we will be in touch as soon as possible.
    </div>

    <div v-if="unsuccessful_submission"
         class="w-full 2 rounded-lg bg-red-50 p-4 text-center text-sm text-red-700"
         role="alert">
      There has been an <span class="font-semibold">error</span> uploading your
      submission, please get in touch if this issue persists.
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="name" class="mb-2">Your Name:</label>
      <input type="text" name="name" id="name" required v-model="name" />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="number" class="mb-2">Your Number:</label>
      <input type="text" name="number" id="number" v-model="number" />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="email" class="mb-2">Your Email Address:</label>
      <input type="email" name="email" id="email" required v-model="email" />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="introduction" class="mb-2">Introduce Yourself:</label>
      <textarea name="introduction" id="introduction" class="h-32 resize-none" v-model="introduction"></textarea>
    </div>

    <div class="flex flex-col sm:flex-row justify-between gap-4">

      <div class="flex w-full">
        <label for="headshot" class="w-1/2 flex justify-center items-center text-sm py-2 px-4 rounded-l
        border-0 text-sm font-semibold bg-primary text-white hover:bg-red-700 cursor-pointer">
          Upload headshot
        </label>

        <span class="w-1/2 rounded-r px-4 py-2 file-chosen bg-support break-words">{{ headshotFileName }}</span>
        <input type="file" name="headshot" id="headshot" class="hidden" @change="updateFilePreview" required/>
      </div>

      <div class="flex w-full">
        <label for="csv" class="w-1/2 flex justify-center items-center text-sm py-2 px-4 rounded-l
        border-0 text-sm font-semibold bg-primary text-white hover:bg-red-700 cursor-pointer">
          Upload CSV
        </label>

        <span class="w-1/2 rounded-r px-4 py-2 file-chosen bg-support break-words">{{ csvFileName }}</span>
        <input type="file" name="csv" id="csv" class="hidden" @change="updateFilePreview" required/>
      </div>

    </div>

    <input name="origin" class="hidden" :value="props.origin" />

    <div class="flex justify-between gap-4 py-4">
      <a class="w-max cursor-pointer pl-4 text-primary-text hover:text-black" :href="props.tcs" target="_blank">View Terms and conditions</a>

      <div class="flex content-center">
        <input type="checkbox" id="terms" name="terms" value="Agreed" class="mr-4 cursor-pointer" required/>
        <label for="terms" class="cursor-pointer hover:hover:text-black">I have read the terms and conditions</label>
      </div>

    </div>

    <button class="px-4 py-2 w-full md:w-[calc(50%-8px)] text-white rounded bg-primary hover:bg-red-700">Submit</button>

  </form>
</template>
