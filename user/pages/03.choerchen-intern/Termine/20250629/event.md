---
title: 'Konzert am 29.06.25 ?'
event:
    status: scheduled
    start: '29-06-2025 00:00'
    end: '29-06-2025 00:00'
    ticket_show: hidden
    freq: none
    topic:
        - Konzert
    location: 'Groß Kienitz'
permissions:
    inherit: true
cache_enable: false
checkavailibility: true
checklabel: '20250906'
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

_Bitte eintragen, wer bei diesem Konzert dabei sein kann._

===

Birgit schrieb am 22.03.25: 
... "Am 29.06. könnten wir das Konzert noch in Groß Kienitz singen. Auch hier bräuchten wir eine Rückmeldung 
"


[ choerchen-availibility ]

</br>
</br>

[ choerchen-availibility-form ]


