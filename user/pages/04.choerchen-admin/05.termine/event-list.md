---
title: 'Termine'
content:
    items: '@self.children'
    order:
        by: date
        dir: desc
permissions:
    inherit: true
taxonomy:
    category:
        - admin
simple-responsive-tables:
    active: true
tablesorter:
    table_nums: '1,2,3'
    active: true
    themes: green,blue
    sorter: 'shortDate'
    dateFormat: 'ddmmyyyy'
    sortReset: true
    args:
       1:
         theme: green
         headers: {
                    0: { sorter: false },
                    1: { sorter: false},
                    2: { sorter: false },
                    3: { sorter: false }
         }
       2:
         sortList: [[1,1]]
         theme: blue
 
       3:
         sortList: [[1,1]]
         theme: blue 
---

Termine