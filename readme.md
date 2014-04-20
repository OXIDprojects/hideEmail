eMail-Adressen wirksam vor Spam-Bots schützen!

Features:

- erzeugt aus der Owner-Email-Adresse eine txt-Datei im tmp-Ordner

- der Inhalt dieser Datei wird in einem iframe in den CMS-Seiten zb. Impressum, AGB etc. angezeigt 

- der Inhalt des iframes wird aber nur angezeigt, wen der Aufruf vom Shop direkt kommt!

- damit wird die Mail-Adresse wirksam gegen alle Bots geschützt.

Installation: 

1. Inhalt von "copythis" kopieren in den modules-Ordner

2. tmp leeren ist nur erforderlich, falls die Mail-Adresse geändert wurde.

3. Modul aktivieren unter  "Erweiterungen" -> "Module".

4. die Mailadresse anzeigen in den CMS-Seiten mit [{ $oViewConf->showEmailFrame() }]


Shopversion:

Getestet mit OXID eShop CE 4.6.2 und 4.8.4

Licensing: 

Patchwork.de
Author: Hartmut Hoffmann

Copyright 2014 Patchwork.de

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
