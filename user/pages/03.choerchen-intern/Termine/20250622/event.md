---
title: 'Jubiläumskonzert am 22.06.2025'
event:
    status: scheduled
    start: '22-06-2025 00:00'
    end: '22-06-2025 00:00'
    ticket_show: hidden
    freq: none
    topic:
        - Probentag
    location: ''
permissions:
    inherit: true
cache_enable: false

checkavailibility: true
checklabel: '20250622'
checklist: /choerchen-intern/choerchenmitglieder
form:
    name: Availibility
    fields:
        dynamic_fieldset:
            type: fieldset
            id: options
            legend: 'Wer ist da?'
            fields: null
    buttons:
        submit:
            type: submit
            value: Speichern
    process:
        type: toggle
        label: PLUGIN_ADMIN.PROCESS
        help: PLUGIN_ADMIN.PROCESS_HELP
        use: keys
        save:
            filename: 'feedback-{{ form.page.header.checklabel|e }}.txt'
            operation: create
            body: '{% include ''partials/forms/choerchen_data.txt.twig'' %}'
        message: Gespeichert!
published: true
---

_Ort und Uhrzeit werden noch festgelegt._
