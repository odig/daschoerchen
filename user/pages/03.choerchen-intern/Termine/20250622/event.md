---
title: 'Jubiläumskonzert am 22.06.2025'
event:
    status: scheduled
    start: '22-06-2025 15:00'
    end: '22-06-2025 17:00'
    ticket_show: hidden
    freq: none
    topic:
        - Konzert
    location: 'Dorfkirche Diedersdorf'
permissions:
    inherit: true
cache_enable: false
checkavailibility: true
checklabel: '20250622'
checklist: /choerchen-intern/choerchenmitglieder
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

[<i class="fa fa-hand-o-right"></i> <b>Konzertflyer</b> <i class="fa fa-hand-o-left"></i>](/home/ankuendigungen-fuer-2025/Jubiläumskonzert-22-Juni-2025-Flyer.pdf)

===


[ choerchen-availibility ]

</br>
</br>

[ choerchen-availibility-form ]


