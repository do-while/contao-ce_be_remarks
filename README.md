# contao-ce_be_remarks
**Backend Hinweise und Anmerkungen, z.B. für Redakteure im Backend als Content-Element, 
Backend-Formularfeld oder im CSS-Editor anlegen.**

Diese Erweiterung stellt ein zusätzliches Content-Element "Backend Hinweise" und ein zusätzliches 
Formularelement zur Verfügung. Diese Elemente erzeugen **keine** Ausgabe im Frontend, sondern sollen 
die Möglichkeit bieten, Redakteuren und Bearbeitern direkt im Artikel, im Formulargenerator Nachrichten 
oder Erklärungen anzuzeigen. Zur Klassifizierung erhält jeder Eintrag ein auswählbares Symbol.

Die Backend Hinweise haben keine Auswirkung auf die Darstellung im Frontend!

Ab **Version 1.1** wurde ein Codebereich für HTML ergänzt. Hier hat man die Möglichkeit für das Frontend Auszeichnungen, wie öffnende oder schließende DIVs, einzutragen. Ich habe gemerkt, dass ich oft hinter den Anweisungen für den Redakteur mit `<div class="foo">` einen Block eröffnet habe. Dieser Quellcode stand dann sichtbar für den Redakteur im Backend und mußte extra erklärt werden. Mit dem neuen Feature lassen sich diese HTML-Contentelemente hinter den Anweisungen oder Hinweisen verstecken.



Version:<br>
* 2.0.1 - 2024-07-24 - Unterstützung Dark-Mode
* 2.0.0 - 2024-04-08 - Version für Contao Version ^5.3
* 1.1.0 - 2020-06-13 - HTML-Codebereich für Frontend-Ausgabe ergänzt
* 1.0.0 - 2017-08-06 - Version für Contao 4.4


___
# contao-ce_be_remarks
**Add backend remarks and notes, e.g. for editors in the backend as content element, backend 
form field or in the CSS editor.**

This extension provides an additional content element "Backend Remarks" and an additional form 
element. These elements generate **no** output in the frontend, but should offer the possibility 
to display backend user and editors directly in the article, the Contao CSS editor or in the form 
generator messages or explanations. For classification, each entry has a selectable symbol.

The backend notes have no effect on the output in the frontend!

Starting with **Version 1.1** a code area for HTML was added. Here you have the possibility to enter markups for the frontend, like opening or closing DIVs. I noticed that I often opened a block with `<div class="foo">` behind the instructions for the editor. This source code was then visible for the editor in the backend and had to be explained separately. With the new feature these HTML content elements can be hidden behind the instructions or hints.


___
Softleister - 2024-07-24

