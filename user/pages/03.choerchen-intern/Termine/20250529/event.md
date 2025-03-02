---
title: 'Chorfahrt vom 29.05. bis 01.06.2025'
event:
    status: scheduled
    start: '29-05-2025 15:00'
    end: '01-06-2025 12:00'
    ticket_show: price
    freq: none
    topic:
        - Chorfahrt
    location: 'Skaterhotel Petkus'
    ticket_price: '150 pro Person'
permissions:
    inherit: true
checkavailibility: true
checklabel: '20250529'
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
---

