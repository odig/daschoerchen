---
title: Mittwoch, 05.03.2025
event:
    status: scheduled
    start: '05-03-2025 19:00'
    end: '05-03-2025 21:00'
    ticket_show: hidden
    freq: none
    topic:
        - Probe
    location: 'Pfarrhaus Diedersdorf'
permissions:
    inherit: true

checkavailibility: true
checklabel: '20250305'
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

