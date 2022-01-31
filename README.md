# testsearch
# Run Project
 
 requisitos
 - npm
 - composer

se tiene una configuracion con mysql, sin embargo sientase libre escoger la base de datos.

una vez tenga la base de datos configurada corra las migracion y cargue el csv en la tabla stakeholders

Los datos de consulta estan en la carpeta
     
     resources/assets/doc/Libro2.csv

para que tenga mas efecto dentro de la base detos corra 

    UPDATE stakeholders SET name = LOWER(NAME);
