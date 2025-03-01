---
title: Sonnabend, 08.03.2025
cache_enable: false
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

checkavailibility: true
checklabel: '20250308'
checklist: '/choerchen-intern/choerchenmitglieder'


form:
    name: Availibility
    fields:
        dynamic_fieldset:
            type: fieldset
            id: options
            legend: 'Options'
            fields:

    buttons:
        submit:
          type: submit
          value: Speichern

    process:
        type: toggle
        label: PLUGIN_ADMIN.PROCESS
        help: PLUGIN_ADMIN.PROCESS_HELP
        default:
            markdown: true
            twig: true
        options:
            markdown: Markdown
            twig: Twig
        use: keys
        save:
          filename: "{% include 'partials/forms/choerchen_filename.txt.twig' %}"
          operation: add
          body: "{% include 'partials/forms/choerchen_data.txt.twig' %}"
        message: Gespeichert!



---

Probentag am 08.03.2025

