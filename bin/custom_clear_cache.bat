rem on utilise les rem pour les commentaires, rem comme remarque

rem #actually remove var/cache
rem #rm var/cache -R

rem #creation de l'entité Gender
rem php bin/console doctrine:generate:entity AppBundle:Gender --fields="name:string(unique=true)" -vvv -n
rem #creation de l'entité EmailTemplate
rem php bin/console doctrine:generate:entity AppBundle:EmailTemplate --fields="type:string(nullable=true) content:string(nullable=false)" -vvv -n