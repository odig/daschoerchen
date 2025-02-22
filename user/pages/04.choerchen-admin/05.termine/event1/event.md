---
title: event1
event:
    status: scheduled
    start: '08-03-2025 10:00'
    end: '08-03-2025 14:30'
    ticket_show: hidden
    freq: none
    topic:
        - Probentag
    location: 'Pfarrhaus Diedersdorf'
permissions:
    inherit: true

form:
    name: availibility

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

