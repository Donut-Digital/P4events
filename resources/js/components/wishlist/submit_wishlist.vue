<script setup>
// import ref functionality
import { ref } from "vue";
import { generateRecaptchaToken } from "../../modules/Recaptcha.js";

// values passed into the component
const props = defineProps(["csrf"]);

// ref allows these fields to be bound to an input and updated dynamically
const name = ref("");
const email = ref("");
const number = ref("");
const location = ref("");
const date = ref("");
const message = ref("");

let successful_submission = ref(false);
let unsuccessful_submission = ref(false);

async function submit(event)
{
  let form = event.target;
  let data = new FormData(form);

  let recaptchaToken = await generateRecaptchaToken();
  data.append("token", recaptchaToken);
  data.append("products", localStorage.getItem('wishlist'));

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
          email.value = "";
          number.value = "";
          location.value = "";
          date.value = "";
          message.value = "";

          localStorage.setItem('wishlist', '[]');
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

  <div v-if="successful_submission"
       class="mx-auto mb-10 w-full rounded-lg bg-green-50 p-4 text-center text-sm text-green-700"
       role="alert">
    <span class="font-semibold">Success!</span> Thank you for your submission,
    we will be in touch as soon as possible.
  </div>

  <div v-if="unsuccessful_submission"
       class="mx-auto mb-10 w-full rounded-lg bg-red-50 p-4 text-center text-sm text-red-700"
       role="alert">
    There has been an <span class="font-semibold">error</span> uploading your
    submission, please get in touch if this issue persists.
  </div>

  <form
      id="wishlist_form"
      method="post"
      action="/api/create/wishlist"
      @submit.prevent="submit">
    <div class="flex flex-col items-stretch justify-start field">
      <label for="name" class="my-2">Name</label>
      <input type="text" name="name" id="name" v-model="name" required  />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="email" class="my-2">Email</label>
      <input type="email" name="email" id="email" v-model="email" required />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="number" class="my-2">Phone</label>
      <input type="text" name="number" id="number" v-model="number" required />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="location" class="my-2">Event Location</label>
      <input type="text" name="location" id="location" v-model="location" required />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="date" class="my-2">Event Date</label>
      <input type="date" name="date" id="date" v-model="date" required />
    </div>

    <div class="flex flex-col items-stretch justify-start field">
      <label for="message" class="my-2">Message</label>
      <textarea name="message" id="message" class="h-32 resize-none" v-model="message" required></textarea>
    </div>

    <button class="px-4 py-2 mt-4 w-full md:w-[calc(50%-8px)] text-white rounded bg-primary hover:bg-red-700">Submit</button>

  </form>

</template>
