---
title: 'Probentag am 10.05.2025'
event:
    status: scheduled
    start: '10-05-2025 10:00'
    end: '10-05-2025 14:30'
    ticket_show: hidden
    freq: none
    topic:
        - Probentag
    location: 'Pfarrhaus Diedersdorf'
permissions:
    inherit: true
cache_enable: false

checkavailibility: true
checklabel: '20250510'
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

