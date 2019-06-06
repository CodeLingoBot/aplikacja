
## Karol Reinert 


## Instalacja 

    1. Utwórz nową lokalną bazę danych
       Nazwa: homestead
    2. Pobierz composera
    https://getcomposer.org/download/
    3. Pobierz projekt z GitHuba i 
       wruć go na pulpit
    4. Zmień nazwę pliku .env.example 
       na .env
    5. W plku .env skonfiguruj połączenie z Twoją bazą danych MySQL
    6. Otwórz konsole w katalogu aplikacji
    7. Uruchom 'composer insall'
    8. Uruchom 'php artian key:generate'
    9. Uruchom 'php artian migrate'
    10. Uruchom 'php artisan serve' by uruchomić aplikacje.
    
Uwaga jeśli wystąpiły by problemy z widokiem 
front-endu uruchom 'npm run install && npm run dev' w konsoli z projektem .
