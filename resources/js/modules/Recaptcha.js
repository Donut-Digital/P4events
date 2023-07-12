import grecaptcha from "laravel-mix/src/Dependencies";

export const generateRecaptchaToken = async function () {
  return grecaptcha.execute("6LdXbLMlAAAAAJg8pbUQIzEW5jKRWorqlQY1XiNr", {
    action: "submit",
  });
};
