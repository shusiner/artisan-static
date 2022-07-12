---
title: "Form "
date: 2022-07-12
image: https://www.lifegate.com/app/uploads/mare-fa-bene-2.jpg
comments: true
---
<div>

<form name="contact" method="POST" data-netlify="true">
  <input type="hidden" name="subject" 
  value="Sales inquiry from mysitename.netlify.app" />
  <p>
    <label>Your Name: <input type="text" name="name" /></label>
  </p>
  <p>
    <label>Your Email: <input type="email" name="email" /></label>
  </p>
  <p>
    <label>Message: <textarea name="message"></textarea></label>
  </p>
  <p>
    <button type="submit">Send</button>
  </p>
</form>

</div>