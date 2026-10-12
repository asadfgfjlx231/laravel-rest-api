API végpontok
HTTP metódus	Végpont	Leírás	Autentikáció szükséges?
GET	/api/users	Összes felhasználó lekérése	Igen – Sanctum
POST	/api/users/login	Bejelentkezés	Nem
GET	/api/user	Bejelentkezett felhasználó adatainak lekérése	Igen – Sanctum
GET	/api/counties	Összes megye lekérése a városaival	Nem
GET	/api/counties/{id}	Egy adott megye lekérése	Nem
POST	/api/counties	Új megye létrehozása	Igen – Sanctum
PUT	/api/counties/{id}	Megye módosítása	Igen – Sanctum
DELETE	/api/counties/{id}	Megye törlése	Igen – Sanctum
GET	/api/cities	Összes város lekérése	Nem
GET	/api/cities/{id}	Egy adott város lekérése	Nem
GET	/api/cities/search	Városok keresése névrészlet és megyeazonosító alapján	Nem
POST	/api/cities	Új város létrehozása	Igen – Sanctum
PUT	/api/cities/{id}	Város módosítása	Igen – Sanctum
DELETE	/api/cities/{id}	Város törlése	Igen – Sanctum

Megjegyzés: Az autentikációt igénylő végpontokhoz érvényes Laravel Sanctum hitelesítés szükséges. A {id} az adott rekord azonosítóját jelöli.