<script setup>
// import ref functionality
import { ref } from "vue";
import { generateRecaptchaToken } from "../../modules/Recaptcha.js";

// ref allows these fields to be bound to an input and updated dynamically
const name = ref("");
const number = ref("");
const email = ref("");
const date = ref("");
const description = ref("");

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
          "X-CSRF-TOKEN":document.querySelector('meta[name="csrf-token"]').content,
          "X-Requested-With": "XMLHttpRequest",
        },
  })
      // promise fulfilled
      .then((response) =>
      {
        console.log(response);
        if (response.status === 200)
        {
          successful_submission.value = true;

          name.value = "";
          number.value = "";
          email.value = "";
          date.value = "";
          description.value = "";
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
      <label for="date" class="mb-2">Date of the event:</label>
      <input type="date" name="date" id="date" required v-model="date" />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="event_description" class="mb-2">Briefly describe your event:</label>
      <textarea name="event_description" id="event_description" class="h-32 resize-none" v-model="description"></textarea>
    </div>

    <div>
      <p class="pb-2">When is best to contact you?</p>
      <ul class="flex flex-col md:flex-row justify-between gap-4">
        <li class="w-full">
          <input id="morning" name="contact_time[]" type="checkbox" value="morning" class="hidden peer">
          <label for="morning" class="block w-full hover:cursor-pointer text-center py-2 border border-support peer-checked:text-white peer-checked:bg-primary">Morning</label>
        </li>
        <li class="w-full">
          <input id="afternoon" name="contact_time[]" type="checkbox" value="afternoon" class="hidden peer">
          <label for="afternoon" class="block w-full hover:cursor-pointer text-center py-2 border border-support peer-checked:text-white peer-checked:bg-primary">Afternoon</label>
        </li>
        <li class="w-full">
          <input id="evening" name="contact_time[]" type="checkbox" value="evening" class="hidden peer">
          <label for="evening" class="block w-full hover:cursor-pointer text-center py-2 border border-support peer-checked:text-white peer-checked:bg-primary">Evening</label>
        </li>
      </ul>
    </div>

    <div>
      <p class="pb-2">How would you like to be contacted?</p>
      <ul class="flex flex-col md:flex-row justify-between gap-4">
        <li class="w-full">
          <input id="via_email" name="contact_method[]" type="checkbox" value="via_email" class="hidden peer">
          <label for="via_email" class="block w-full hover:cursor-pointer text-center py-2 border border-support peer-checked:text-white peer-checked:bg-primary">Email</label>
        </li>
        <li class="w-full">
          <input id="sms" name="contact_method[]" type="checkbox" value="sms" class="hidden peer">
          <label for="sms" class="block w-full hover:cursor-pointer text-center py-2 border border-support peer-checked:text-white peer-checked:bg-primary">SMS</label>
        </li>
        <li class="w-full">
          <input id="telephone" name="contact_method[]" type="checkbox" value="telephone" class="hidden peer">
          <label for="telephone" class="block w-full hover:cursor-pointer text-center py-2 border border-support peer-checked:text-white peer-checked:bg-primary">Telephone</label>
        </li>
      </ul>
    </div>

    <input name="origin" class="hidden" value="event_form_block" />

    <button class="px-4 py-2 w-full md:w-[calc(50%-8px)] text-white rounded bg-primary hover:bg-red-700">Submit</button>

  </form>
</template>
