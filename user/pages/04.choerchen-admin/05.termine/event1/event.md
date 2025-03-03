---
title: event1
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

form:
    A1:
        type: fieldset
        id: options
        legend: 'Options'
        fields:
            name:
            label: Name
            placeholder: Enter your name
            autocomplete: on
            type: text
            validate:
                required: true


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
          #fileprefix: proben-20250308-
          #dateformat: Ymd-His-u
          #extension: txt
          filename: feedback-20250308.yaml
          operation: add
          body: "{% include 'forms/data.txt.twig' %}"
        message: Gespeichert!

---

