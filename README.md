# NennyBiz

Sales & Inventory Management System

Developed by:
- Zul
- Lee

Version: 0.1 Alpha

# NennyBiz Framework

A lightweight PHP MVC Framework built from scratch.

---

## Project Goal

NennyBiz Framework is developed from the ground up to fully understand how an MVC framework works internally instead of relying on existing frameworks.

The primary objective is simplicity, readability and maintainability.

---

## Current Version

v0.5.0 (Development)

---

## Current Features

- Environment Loader (.env)
- PDO Database Connection
- Application Bootstrap
- Router
- Controller Dispatch
- View Engine
- Global Helper Functions

---

## Project Structure

```
app/
├── Controllers/
├── Core/
├── Models/
├── Views/

config/
public/
routes/
storage/
vendor/
```

---

## Request Flow

```
Browser
    │
Apache (.htaccess)
    │
public/index.php
    │
bootstrap.php
    │
Application
    │
Router
    │
Controller
    │
View
    │
Browser
```

---

## Development Roadmap

### Phase 1 : MVC Core

- [x] Project Structure
- [x] Environment Loader
- [x] Database
- [x] Router
- [x] Controller
- [x] View
- [x] Helper Functions
- [ ] Layout Engine
- [ ] Request
- [ ] Response
- [ ] Error Handler

### Phase 2 : Business Framework

- [ ] Authentication
- [ ] Dashboard
- [ ] Products
- [ ] Customers
- [ ] Orders
- [ ] Invoices
- [ ] Reports
- [ ] Settings

---

## License

MIT License