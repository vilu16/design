---
---
Laddningstid
=========================

I denna rapport kommer vi att analysera tre olika webbplatser och mäta hur snabbt de laddas samt om de innehåller
något som kan förbättras för laddningstid och användbarhet.

#### Urval

För min analys har jag valt tre webbplatser där alla har samma syfte, att sälja elektronik och teknik. Varför jag
valde just dessa hemsidor är för jag tycker det är viktigt när man surfar runt och ska kolla på teknik och elektronik
att det går snabbt och smidigt. Alla dessa sidor har även gott om bilder som möjligvis kan öka laddningstider om de
inte är optimerade ordentligt.

- [Inet.se](https://www.inet.se/)
- [Komplett.se](https://www.komplett.se/)
- [Webhallen.se](https://www.webhallen.com/se/)

#### Metod

För att analysera dessa hemsidor kommer jag använda mig av verktyget
[PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) samt genom att inspektera sidan och kolla
över laddningstider för varierande objekt. Jag använder även Google kalkylark för att spara och sortera resultet från
våra mätningar.

#### Resultat

[Google kalkylark för analys](https://docs.google.com/spreadsheets/d/101do_eA5rpZ4Jqh-PYAu9no7Ucv_KMUNpERfkdeqhXo/edit?usp=sharing)
I min mätning har jag valt ut tre olika delar av webbplatsen som ska testas och se hur bra laddningstid samt hur mycket
resurser som laddas och se sidans storlek.

##### Inet.se
![Inet startsida](../htdocs/img/inet.PNG)

Jag har valt ut tre olika sidor från webbplatsen som ska analyseras, dessa sidorna är:

- [Startsidan](https://www.inet.se/) som fick betyget 83 på dator samt betyget 36 på mobil. Sidan hade en laddningstid
på 1.32 sekunder och laddade in 1.3MB resurser av totalt 3.1MB.
- [Kategorin stationär dator](https://www.inet.se/kategori/29/stationar-dator) som fick betyget 94 på dator samt betyget
43 på mobil. Sidan hade en laddningstid på 0.95 sekunder och laddade in 1.4MB resurser av totalt 3.1MB.
- [Kategorin kampanjer](https://www.inet.se/kampanjer) som fick betyget 86 på dator samt 34 på mobil. Sidan hade en
laddningstid på 1.04 sekunder och laddade in 0.99MB resurser av totalt 2.6MB.

Något man märker på Inet när man analyserar sidan via PageSpeed Insights är deras hantering av bilder speciellt på
mobilen. När man öppnar någon an inets sidor som har bilder på sig via mobilen så laddas alla bilder sin samtidigt, även
fast de inte finns med på skärmen just då. Här hade det varit bättre att använda sig av en lat inläsning där de dolda
bilderna blir inlästa sist så tiden till interaktivt tillstånd minskar. Några av bilderna skulle även kunna byta format
till något lite mer modernare som WebP istället för png bilder. Inet skulle även kunna skjuta upp vissa inläsningar och
prioritera vissa CSS samt javascripts för att optimera inläsningen. Inet på datorn fungerar relativt bra men skulle
kunna förbättra sig något i sin CSS kod för att göra all text synlig innan webbteckensnitten som används läses in.

##### Komplett.se

![Komplett startsida](../htdocs/img/komplett.PNG)

Här är de tre olika sidorna från webbplatsen som ska analyseras:

- [Startsida](https://www.komplett.se/) som fick betyget 70 på dator samt betyget 30 för mobil. Sidan hade en laddningstid
på 3.29 sekunder och laddade in 2.8MB resurser av totalt 7MB.
- [Outlet](https://www.komplett.se/kampanj/61286/outlet) som fick betyget 50 på dator samt betyget 30 för mobil. Sidan
hade en laddningstid på 3.72 sekunder och laddade in 1.1MB resurser av totalt 4.5MB.
- [Kategorin stationär dator](https://www.komplett.se/category/11095/datorer/datorer-stationara) som fick betyget 73 på dator
samt betyget 47 på mobil. Sidan hade en laddningstid på 3.37 sekunder och laddade in 0.79MB resurser av totalt 2.9MB.

Något vi kan se gemensamt med alla dessa sidor är att de laddar in oanvänd CSS som ökar laddningstiden med ~0.75
sekunder helt i onödan. Många av bilderna som används på sidan är i formatet jpg och hade möjligtvis kunnat använda sig
av ett modernare alternativ så som WebP för bättre komprimering. Vid mobil användning skulle man kunna skjuta upp
inläsningen av bilder som inte direkt visas på skärmen och istället använda sig av en lat inläsning där viktigare
resurser än bilder som inte ens finns med på bild blir prioriterade för att minka tiden till interaktivt tillstånd.

##### Webhallen.se

![Webhallen startsida](../htdocs/img/webhallen.PNG)

Här är de tre olika sidor från webbplatsen som ska  analyseras:

- [Startsida](https://www.webhallen.com/se/) som fick betyget 83 på dator samt betyget 35 för mobil. Sidan hade en
laddningstid på 7.6 sekunder och laddade in 1.6MB resurser av totalt 3.9MB.
- [Kampanjer](https://www.webhallen.com/se/campaigns?sort=discountSales) som fick betyget 86 på dator samt betyget 30
för mobil. Sidan hade en laddningstid på 3.12 sekunder och laddade in 3.8MB resurser av totalt 7.7MB.
- [Kategorin stationär dator](https://www.webhallen.com/se/category/3980-Stationar-dator) som fick betyget 79 på dator
samt betyget 38 för mobil. Sidan hade en laddningstid på 2.67 sekunder och laddade in 1.4MB resurser av totalt 3.7MB.

Webhallens hemsida är relativt bra optimerad för användning via dator men har större problem med laddningstid när det
kommer till mobila enheter. En generell förbättring som behövs på sidan är prioritering av resurer där man skulle kunna
läsa in viktiga resurser i förväg som kommer att begränsas senare i sidinläsningen om de inte laddas in först. Man
skulle även för mobila enheter kunna skjuta upp inläsningen av bilder som inte direkt visas på sidan när man laddar in
den och istället använda sig av lat inläsning där vi prioriterar andra resurser innan bilderna som inte ens finns med
på skärmen laddas in. Det ser även ut att finnas oanvänd CSS kod som kan tas bort och spara ~0.3 sekunder av
laddningstiden.


#### Analys

De vanligaste förbättringsområdena för de tre sidor som jag nu har analyserat ser ut att vara just hanteringen av bilder
och hur man kan minska tiden tills sidan blir interaktiv. Speciellt när det kommer till användning från mobilen, där
prestandan jämnfört med en dator ofta är något lägre. Alla dessa sidor använder sig även fortfarande av några bilder
med formatet PNG och JPEG istället för lite mer optimerade moderna format så som WebP eller JPEG 2000. Laddningstiden på
sidorna ser ut att baseras väldigt mycket på just inläsningen av bilder och därför är just den optimeringen väldigt
viktig. Ett annat problem alla dessa sidor ser ut att ha är att de har CSS kod som finns med men som inte används på
sidan och försämrar därmed inläsningen utan någon anledning. Från denna analysen har jag kommit fram till att valet av
bilder samt hur bra man optimerar bilderna och hanterar bilderna har extremt stor påverkan på prestandan. Detta känns
som något bra att alltid ha i åtanke när man framöver utvecklar webbplatser.

Vinnare för testet:

1. Inet.se
2. Webhallen.se
3. Komplett.se

Jag ansåg Inet som vinnare av testet mellan dessa sidor då inet har överlägset bäst laddningstid tillsammans med bra
betyg från PageSpeed Insights även fast mobil betyget var en riktig besvikelse. Dock så gäller det samma för alla sidor
jag analyserade, ingen av dem är ordentligt optimerade för mobila enhter, speciellt när det kommer till bildhantering.

Om jag skulle bestämma en absolut laddningstid på en sida som enligt mig skulle uppfattas som snabb är om sidan kan
laddas in och vara redo att användas inom 3 sekunder. Det är egentligen bara Inet som håller sig inom denna
laddningstiden. 3 sekunder känns som en bra gräns att hålla som mål för sina sidor även fast någon sekund extra inte
gör allt för mycket skillnad. När man klickar runt på alla dessa hemsidor så anser jag egentligen att de alla har en
generell snabbhet där man egentligen inte känner någon speciell skillnad som användare oavsett webbplats.

#### Övrigt

*Författarens namn: Viktor Lundberg*
