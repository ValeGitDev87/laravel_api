le factoy vengo usati per  testing al db ;
utilizzo : 
1) si lancia php artisan tinker cli che permette di dialogare con il db;
2) comando per creare =  Thread::factory()->count(n)->create();

creazione api ;
quando si crea il controller che gestisce l'api bisonga crearo con name space e crearli versionati 
per fare cio nella comapdo bisogna inserire \\ per ogni cartella

per formattare o organizzare le api  sencondo la nostra regola si usano le ELQUENT API RESOURCE :

1)  php artisan make:resource V1\\ThreadCollection (per avere una collezione di thread)
2)  \\\\\\\\\\\\\\\\\\ V1\\ThreadResource (singolo thread)