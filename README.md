# De root van ons project

## Inleiding
De map __dev__ is de root van onze applicatie. In deze map plaatsen we uitsluitend de PHP-bestanden die verantwoordelijk zijn voor de weergave van een pagina in onze applicatie.  
  
## Voorbeeld(en)
Je vindt dus in deze map bijvoorbeeld de volgende bestanden:  
* index.php  
De startpagina van onze applicatie. Hierin willen we een overzicht van alle threads in de database.  
  
* login.php  
Dit bestand doet niks anders dan het tonen van een login-formulier. Het afhandelen van een login laten we over aan een ander PHP-bestand in de map __app__, zoals bijvoorbeeld het bestand __login_afhandelen.php__.  
  
* register.php  
Dit bestand doet niets anders dan het weergeven van een registratie formulier. Ook hier geldt weer dat we de afhandeling van een registratie (opslaan van de nieuwe gebruiker) aan een ander bestand in de map __app__ overlaten, bijvoorbeeld: __register_afhandelen.php__.  
  
* thread.php  
Dit bestand laat een pagina zien met alle topics van 1 thread.  
  
* rules.php  
Dit bestand laat een static pagina zien met onze forum-regels.  
