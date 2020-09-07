<?php include('../header.php'); ?>

 <h2 id="kernconcepten-van-data-science-modellen">Kernconcepten van data science: modellen</h2>
<p>Een kernconcept binnen data science en analytics zijn modellen. Of je nou iets leest over data analytics, data science of artifical intelligence; het model speelt een centrale rol. Zonder goed begrip van wat nu precies bedoelt wordt met een model, voelt de toepassing als een <em>black box</em>. Om beter te kunnen doorgronden welk onderliggende mechanisme van toepassing is helpt het enorm om de definitie, technieken en doeleinden omtrent modelleren scherp te hebben.</p>
<h3 id="definitie">Definitie</h3>
<p>Een model is te defineren als <strong><em>een versimpele weergave van de werkelijkheid, ten behoeve van een vooraf gespecificeerd doel</em></strong>. Niets meer, niets minder.</p>
<p>Deze versimpeling vindt plaats op basis van assumpties over wat wel en wat niet belangrijk is voor betreffende toepassing. Een model abstraheert details die niet van belang zijn, en behoudt datgene wa wel van belang is.</p>
<h3 id="voorbeelden-van-modellen">Voorbeelden van modellen</h3>
<ul>
<li>Een routekaart is een weergave van de wereld, met als doel om navigeren te vereenvoudigen</li>
<li>Een marquette is een versimpele weergave van bouwproject, met als doel om een beeld te krijgen bij de vormgeving</li>
<li>Een conceptueel model relateert verschillende concepten op een hoger niveau aan elkaar om de werking van een complex systeem te representeren</li>
</ul>
<h3 id="technieken-om-te-modelleren">Technieken om te modelleren</h3>
<ul>
<li><strong>Statistisch modelleren</strong>: modeleren waarbij begrip van relaties van belang is. Omvat hypothesevorming vooraf; welke variabele beïnvloedt wat? Wat zijn de verbanden? Uiteindelijke model valideert deze hypothese.</li>
<li><strong>Machine learning</strong>: modeleren waarbij begrip van relaties tussen variablen niet van belang is, en het gaat om een zo goed mogelijke voorspelling van de target variabele te doen. Geen hypothesevorming. “Leert” zelf patronen in de data; training en validatie van split in data (train- en testset).</li>
</ul>
<h3 id="doeleinden">Doeleinden</h3>
<p>Het maken van modellen is veelal onder te verdelen in verschillende doeleinden.</p>
<ul>
<li><strong>Descriptieve modellen</strong>: begrip opdoen van een bestaand fenomeen</li>
<li><strong>Voorspelmodellen</strong> (predictive model): zo goed mogelijk benaderen van een vooraf gespecificeerde target variabele. een formule om een bepaalde waarde van keuze te benaderen. Die formule kan wiskundig zijn, of een logical statement zoals een business rule.</li>
</ul>
<h3 id="eigenschappen-modellen">Eigenschappen modellen</h3>
<ul>
<li>Een model is altijd een versimpelde, en dus inherent onjuiste, weergave van de werkelijkheid</li>
<li>In het geval van machine learning is een model verouderd op het moment dat het in gebruik wordt genomen; omdat historische data anders zal zijn dan data van de huidige realiteit</li>
</ul>
<blockquote>
<p>“All models are wrong but some are useful.” – George E.P. Box</p>
</blockquote>
<p><a href="#">test</a></p>
<?php include('../footer.php'); ?> 
