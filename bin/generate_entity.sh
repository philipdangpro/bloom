#creation database
php bin/console doctrine:database:create

#creation de l'entité Gender
php bin/console doctrine:generate:entity AppBundle:Gender --fields="name:string(unique=true)" -vvv -n
#creation de l'entité EmailTemplate
php bin/console doctrine:generate:entity AppBundle:EmailTemplate --fields="type:string(nullable=true) content:string(nullable=false)" -vvv -n
#creation de l'entité SecretQuestion
php bin/console doctrine:generate:entity AppBundle:SecretQuestion --fields="type:string(nullable=true) content:string(nullable=false)" -vvv -n
#creation de l'entité User
php bin/console doctrine:generate:entity AppBundle:User --fields="firstname:string lastname:string birthdate:date gender:smallint is_active:boolean is_admin:boolean created_at:time last_modified_at:time last_connected_at:time blocked_by:string friends:string followings:string" -vvv -n
#creation de l'entité Category
php bin/console doctrine:generate:entity AppBundle:Category --fields="name:string description:string(nullable=true) parent:smallint(nullable=true)" -vvv -n
#creation de l'entité Product
php bin/console doctrine:generate:entity AppBundle:Product --fields="name:string sku:string price:decimal(precision=7 decimal=2 nullable=true unique=false) description:string(nullable=true) tags:string nb_buys:bigint available_qty:int" -vvv -n
#creation de l'entité Tag
php bin/console doctrine:generate:entity AppBundle:Tag --fields="name:string(unique=true)" -vvv -n
#creation de l'entité Country
php bin/console doctrine:generate:entity AppBundle:Country --fields="name:string(unique=true)" -vvv -n
#creation de l'entité RatingComment
php bin/console doctrine:generate:entity AppBundle:RatingComment --fields="comment:string(nullable)" -vvv -n
#creation de l'entité Address
php bin/console doctrine:generate:entity AppBundle:Address --fields="type:smallint(nullable=true) street:string(nullable=true) complement street:string(nullable=true) zipcode:smallint(nullable=true) city:string(nullable=true) country:string(nullable=true)" -vvv -n
#creation de l'entité Order
php bin/console doctrine:generate:entity AppBundle:Order --fields="to_define:string(nullable)" -vvv -n
#creation de l'entité Invoice
php bin/console doctrine:generate:entity AppBundle:Invoice --fields="to_define:string(nullable)" -vvv -n

#creation des getters/setters
php bin/console doctrine:generate:entities

#creation des tables
php bin/console doctrine:schema:validate
php bin/console doctrine:schema:update -f

# Supprime la BD
$ bin/console doctrine:database:drop

# Crée la BD
$ bin/console doctrine:database:create

# Crée les tables
$ bin/console doctrine:schema:create

# Force la mise à jour du schéma
$ bin/console doctrine:schema:update --force

# Affiche le SQL
$ bin/console doctrine:schema:update --dump-sql

bin/console doctrine:fixtures:load
bin/console doctrine:query:sql "select * from nomTable"
bin/console doctrine:generate:entity

