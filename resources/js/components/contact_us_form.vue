<script setup>

// import ref functionality
import { ref } from "vue";
import { generateRecaptchaToken } from '../modules/Recaptcha.js'

// values passed into the component
const props = defineProps(['csrf','origin']);

// ref allows these fields to be bound to an input and updated dynamically
const name = ref('');
const number = ref('');
const email = ref('');

let successful_submission = false;
let unsuccessful_submission = true;

async function submit(event)
{
  let form = event.target
  let data = new FormData(form);

  let recaptchaToken = await generateRecaptchaToken();
  data.append('token',recaptchaToken);

  fetch(form.action,
{
      method: form.method,
      body: data,
      headers:
          {
            'X-CSRF-TOKEN': props.csrf,
            'X-Requested-With':'XMLHttpRequest'
          }
    })
    // promise fulfilled
    .then((response) =>
    {
      if(response.status === 200)
      {
        successful_submission = true;

        name.value = '';
        number.value = '';
        email.value = '';
      }
      else
      {
        console.error('Panic at the disco:', response);
        unsuccessful_submission = true;
      }
    })
    // catch any errors
    .catch(error =>
    {
      console.error('Panic at the disco:', error);
      unsuccessful_submission = true;
    });
}

</script>

<template>

  <div>

    <div v-if="successful_submission" class="p-4 mb-10 text-sm text-green-700 rounded-lg bg-green-50 text-center max-w-3xl mx-auto" role="alert">
      <span class="font-semibold">Success!</span> Thank you for your submission, we will be in touch as soon as possible.
    </div>

    <div v-if="unsuccessful_submission" class="p-4 mb-10 text-sm text-red-700 rounded-lg bg-red-50 text-center max-w-3xl mx-auto" role="alert">
      There has been an <span class="font-semibold">error</span> uploading your submission, please get in touch if this issue persists.
    </div>

    <form id="contact_form" method="post" action="/!/forms/forms" @submit.prevent="submit"
          class="flex flex-col xl:flex-row justify-center flex-wrap space-y-4 xl:space-y-0 xl:space-x-4">

      <div class="field">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" v-model="name" required>
      </div>

      <div class="field">
        <label for="number">Number: </label>
        <input type="text" name="number" id="number" v-model="number" required>
      </div>

      <div class="field">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" v-model="email" required>
      </div>

      <input name="origin" class="hidden" :value="props.origin">

      <button type="submit" class="py-3 px-10 text-center text-white bg-primary">Submit</button>
    </form>

  </div>

</template>
