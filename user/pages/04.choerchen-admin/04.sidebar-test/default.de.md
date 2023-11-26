---
title: 'sidebar test'
content:
    items: '@self.modular'
permissions:
    inherit: true
taxonomy:
    category:
        - admin
date: '09-08-2023 13:34'
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

test1

===

| Datum | Wochentag | Zeit | Beschreibung |  
| :------------ | :------------ | :------------- | : ------------------------------------------- |
| 24.11.2023 | Freitag | ab 19:30 Uhr | Probe im Pfarrhaus Diedersdorf |  
| 02.12.2023 | Sonnabend | 12 bis 16 Uhr | **_Sonderprobe_** im Pfarrhaus Diedersdorf |
|    |   | ab 17 Uhr | Singen beim **Familienadvent in der Dorfkirche Dahlewitz** (**) |
| 08.12.2023 | Freitag | ab 19:30 Uhr | Probe im Pfarrhaus Diedersdorf |  
| 15.12.2023 | Freitag | ab 19:30 Uhr | Probe im Pfarrhaus Diedersdorf |  
| 22.12.2023 | Freitag | ab 19:30 Uhr | Probe im Pfarrhaus Diedersdorf |  
| 03.01.2024 | Mittwoch | ab 19 Uhr | Probe im Pfarrhaus Diedersdorf |  
| 06.01.2024 | Sonnabend | ab 10 Uhr | **Generalprobe** in der Dorfkirche Dahlewitz |  


|col1|col2|col3|
|:-----|:-----|:------|
|1 |c 3|b 4|
|2 |b 3|b 4|
|3 |a 3|b 4|



|col1|col2|col3|
|:-----|:-----|:------|
|test2 |test 3|test 4|
|1 |c 3|c 4|
|2 |b 3|b 4|
|3 |a 3|b 4|
|5 |x 3|b 4|