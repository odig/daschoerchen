---
title: 'Probe am 05.03.2025'
event:
    status: cancelled
    start: '05-03-2025 19:00'
    end: '05-03-2025 21:00'
    ticket_show: hidden
    freq: none
    topic:
        - Probe
    location: 'Pfarrhaus Diedersdorf'
permissions:
    inherit: true
cache_enable: false
checkavailibility: true
checklabel: '20250305'
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

