---
title: test2a
published: true
checkavailibility: true
checklist: /choerchen-intern/choerchenmitglieder
cache_enable: false
simple-responsive-tables:
    active: true
tablesorter:
    active: true
    themes: green
content:
    items:
        - '@page.children': /choerchen-intern/termine
        #- '@self.children'
    dateRange:
        start: today
        #end: 'next week'
        end: 'next month'
    order:
        by: date
        dir: asc

form:
    name: Test
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
            filename: 'feedback-test.txt'
            operation: create
            body: '{% include ''partials/forms/choerchen_data.txt.twig'' %}'
        message: Gespeichert!

---

test 2a

===

test2a

[ choerchen-events ]

[ choerchen-availibility-form ]


[ choerchen-availibility ]
