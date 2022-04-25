# Pflichtenheft

## Menu
### linkes Menu:
	- Home
	- Lebenslauf erstellen

Unterseite "Lebenslauf erstellen":
- Mein Lebenslauf
   - persönliche Daten
   - Foto, About me
   - Schule/Universität
   - Berufserfahrung
   - Ehrenamtliche Tätigkeiten
   - Projekte (Codewars/Github)
   - Programmiersprachen (Balken, Logos)
   - Sprachen (Balken)
   - (Soft Skills)
   - Kenntnisse (Balken)
   - Interessen/Hobbies

#### rechtes Menu Public-Ansicht:
- Login
- Register

### Nach der Registrierung:
#### rechtes Menu:
    - Logout
    - Mein Profil

#### Unterseite "Mein Profil":
- Mein Account
- Mein Lebenslauf
   - persönliche Daten
   - Foto, About me
   - Schule/Universität
   - Berufserfahrung
   - Ehrenamtliche Tätigkeiten
   - Projekte (Codewars/Github)
   - Dokumentenupload
   - Sprachen (Balken)
   - Programmiersprachen (Balken, Logos)
   - Frameworks
   - Soft Skills
   - Kenntnisse (Balken)
   - Interessen/Hobbies

#### Localisation (de, en ...)
- locale controller, route
- locale middleware

#### Test
- UnitTest
- Dusk Test

Database
Tabellen:
- [x] users
  - [ ] customers
    - id 
    - name VARCHAR 50
    - birthdate DATE NULLABLE
    - street VARCHAR 50
    - city VARCHAR 50
    - postcode VARCHAR 10
    - about_me TEXT NULLABLE
    - img VARCHAR 50
    - phone VARCHAR 50
    - email VARCHAR 50
    - password VARCHAR 255
    - remember_token VARCHAR 100 NULLABLE
    - confirmed BOOL DEFAULT 0
    - created_at TIMESTAMP NULLABLE
    - updated_at TIMESTAMP NULLABLE
- [ ] cvs (customer_id, link VARCHAR 100)
- [x] programming_languages (name VARCHAR 50)
- [ ] customer_programming_languages (customer_id, programming_language_id, level)
- [x] frameworks (name VARCHAR 50)
- [ ] customer_frameworks (customer_id, framework_id, level)
- [ ] education (name VARCHAR 50, description TEXT NULLABLE, from DATE, until DATE)
- [ ] working_experience (name VARCHAR 50, description TEXT NULLABLE, from DATE, until DATE)
- [ ] voluntary_work (name VARCHAR 50, description TEXT NULLABLE, from DATE, until DATE)
- [ ] projects (name VARCHAR 50, description TEXT NULLABLE, from DATE, until DATE)
- [ ] customer_documents (customer_id, filename VARCHAR 50, type VARCHAR 10)
- [x] languages (name VARCHAR 50)
- [ ] customer_languages (customer_id, language_id, level)
- [ ] soft_skills (customer_id, name VARCHAR, description TEXT NULLABLE)
- [ ] hard_skills (customer_id, name VARCHAR, description TEXT NULLABLE)
- [ ] interests (customer_id, name VARCHAR, description TEXT NULLABLE)

### persönliche Daten
![persönliche Daten](./img/personal_data.jpg)

### Foto, About me
![Foto, About me](./img/about_me.jpg)

### Schule/Universität
![Schule/Universität](./img/education.jpg)

### Sprachen (Balken)
![Sprachen](./img/languages.jpg)

### Programmiersprachen (Balken, Logos?)
![Programmiersprachen (Balken, Logos)](./img/programming_languages.jpg)

### Frameworks (Balken)
![Frameworks](./img/frameworks.jpg)

