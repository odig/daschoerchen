---
title: 'Probe am 12.03.2025'
event:
    status: cancelled
    start: '12-03-2025 19:00'
    end: '12-03-2025 21:00'
    ticket_show: hidden
    freq: none
    topic:
        - Probe
    location: 'Pfarrhaus Diedersdorf'
permissions:
    inherit: true
cache_enable: false
simple-responsive-tables:
    active: true
tablesorter:
    active: true
    themes: green
    args:
        headers:
            -
                sorter: false
            -
                sorter: false
            -
                sorter: false
            -
                sorter: false
            -
                sorter: false
            -
                sorter: false
checkavailibility: true
checklabel: '20250312'
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

[ choerchen-availibility ]

</br>
</br>

[ choerchen-availibility-form ]

