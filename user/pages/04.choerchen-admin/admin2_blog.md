---
title: Admin
metadata:
    meta1: xcv
content:
    items:
        '@taxonomy':
            category:
                - admin
    limit: 20
    pagination: true
    sidebar: true
    url_taxonomy_filters: true
login:
    visibility_requires_access: true
access:
    admin.super: true
permissions:
    inherit: true
    authors:
        - admin
    groups:
        Administratoren:
            create: true
            read: true
            update: true
            delete: true
        Choerchenadmin:
            delete: false
            create: false
            update: false
            read: false
admin: {  }
cache_enable: false
visible: true
star-ratings:
    star_size: 20
    total_stars: 5
dateformat: 'd-m-Y H:i'
form:
    name: contact

    fields:
        agree_to_terms:
            type: checkbox
            label: "Agree to the terms and conditions"
            validate:
            required: true
            
        name:
          label: Name
          placeholder: Enter your name
          autocomplete: on
          type: text
          validate:
            required: true

        email:
          label: Email
          placeholder: Enter your email address
          type: email
          validate:
            required: true

        message:
          label: Message
          placeholder: Enter your message
          type: textarea
          validate:
            required: true

        g-recaptcha-response:
          label: Captcha
          type: captcha
          recaptcha_not_validated: 'Captcha not valid!'

    buttons:
        submit:
          type: submit
          value: Submit
        reset:
          type: reset
          value: Reset

    process:
        captcha: true
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        email:
            subject: "[Site Contact Form] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        message: Thank you for getting in touch!

---

Admin page

===

ADMIN