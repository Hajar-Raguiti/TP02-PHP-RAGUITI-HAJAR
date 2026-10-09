# TP02-PHP-RAGUITI-HAJAR
TP 02 PHP — Programmation Web 2 — 2026/2027
# Informations 
- Nom : Raguiti 
- Prenom : Hajar 
- Groupe : 2 
# Liste des exercices
| `index.php` | Page d'accueil avec un lien vers chacun des 10 exercices |
| `ex01.php` à `ex09.php` | Solutions des exercices 1 à 9 |
| `ex10_get.html` et `ex10_get.php` | Formulaire GET et son traitement |
| `ex10_post.html` et `ex10_post.php` | Formulaire POST et son traitement |
# Notes concernant les exercices :
- <Exercice 2> :
- les deux variables '$note' et '$Note' sont différent car  php est sensible à la casse.
- Validité des variables :
$a, $_a, $a_a, $AAA et $a1 sont valides .
$a! et $1a sont invalides .
- <Exercice 4> :
- la différence d'affichage de `false` entre `echo` et `var_dump()` : 
'echo' n'affiche rien car il convert la valeur 'false' avant l'affichage ce qui donne rien .
'var_dump()' affiche le type et valeur de 'false' .
- <Exercice 5> :
Les résultats obtenu lors des tests de la variables '$moyenne':
- -1 : Note invalide
- 9 : Non validé
- 10 : Passable
- 12 : Assez bien
- 14 : Bien
- 16 : Très bien
- 21 : Note invalide