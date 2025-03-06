---
title: Test am 01.01.2026
event:
    start: '01-01-2026'
    end: '01-01-2026'
    status: scheduled
    freq: none
    topic:
        - Probentag
    ticket_show: hidden
    location: unknown

checkavailibility: true
checklist: /choerchen-intern/choerchenmitglieder
cache_enable: false
simple-responsive-tables:
    active: true
tablesorter:
    active: true
    themes: green

form:
    name: Testform
    fields:
        dynamic_fieldset:
            type: fieldset
            id: options
            legend: 'Wer ist da?'
            fields: null
    buttons:
        submit:
            type: submit
            value: 'Änderungen speichern'
    process:
        type: toggle
        label: PLUGIN_ADMIN.PROCESS
        help: PLUGIN_ADMIN.PROCESS_HELP
        use: keys
        save:
            filename: 'feedback-{{ form.page.folder|e }}.txt'
            operation: create
            body: '{% include ''partials/forms/choerchen_data.txt.twig'' %}'
        message: Gespeichert!

---

Ort und Uhrzeit werden noch festgelegt.

[ choerchen-availibility-form ]


[ choerchen-availibility ]
