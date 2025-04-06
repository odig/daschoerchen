---
title: 'Konzert am 20.07.25'
event:
    status: cancelled
    start: '19-07-2025 00:00'
    end: '19-07-2025 00:00'
    ticket_show: hidden
    freq: none
    topic:
        - Probentag
    location: Pirow/Prignitz
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

_Am 05.04.25 wurde entschieden, dass der 19.07. besser passt._

===

**Birgit schrieb am 22.03.25:** 

"Hallo ihr Lieben! 
Wir könnten am 19. oder 20.07. in Pirow / Prignitz das Konzert nochmal singen.
Könnt ihr mir hier ein Stimmungsbild geben, 
1. ob ihr könnt
2. ob der 19. oder 20. besser passt 
3. ⁠ich würde vorschlagen: wenn es der 19. wird, dann Konzert um 17 Uhr, am 20. um 16 Uhr wegen der Heimfahrt. Ist nur ein Vorschlag, bin für Änderungen offen." 

... 

"Hier kann man übernachten. Oder mit Womo auf unserem Grundstück in Hellburg. 
http://www.pinocchio-pirow.de/"

!! Am 05.04.25 wurde die Entscheidung für den 19.07. getroffen.

[ choerchen-availibility ]

</br>
</br>

[ choerchen-availibility-form ]


