---
title: 'Probentag am 14.06.2025'
event:
    status: scheduled
    start: '14-06-2025 10:00'
    end: '14-06-2025 14:30'
    ticket_show: hidden
    freq: none
    topic:
        - Probentag
    location: 'Pfarrhaus Diedersdorf'
permissions:
    inherit: true
cache_enable: false

checkavailibility: true
checklabel: '20250614'
checklist: /choerchen-intern/choerchenmitglieder

simple-responsive-tables:
    active: true
tablesorter:
    active: true
    themes: green
    args:
        headers: {
            0: { sorter: false },
            1: { sorter: false },
            2: { sorter: false },
            3: { sorter: false }
            4: { sorter: false }
            5: { sorter: false }
            }

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
published: true
---

[ choerchen-availibility ]

</br>
</br>

[ choerchen-availibility-form ]
