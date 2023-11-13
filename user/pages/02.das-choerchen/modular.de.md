---
title: 'Das Chörchen'
onpage_menu: false
body_classes: 'modular header-image fullwidth'
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _steckbrief
            - _proben
            - _geschichte
permissions:
    groups:
        Administratoren:
            create: true
            read: true
            update: true
            delete: true
        Choerchenadmin:
            create: false
            read: true
            update: false
            delete: false
---

