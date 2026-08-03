# NennyBiz Framework Architecture

Version : v0.5.0

---

# Overview

NennyBiz Framework is a lightweight MVC framework written entirely in PHP.

The framework is designed with the following principles:

- Simple
- Lightweight
- Easy to Understand
- Easy to Maintain
- No unnecessary dependencies

---

# Request Lifecycle

```
Browser
    │
    ▼
Apache (.htaccess)
    │
    ▼
public/index.php
    │
    ▼
bootstrap.php
    │
    ▼
Application
    │
    ▼
Router
    │
    ▼
Controller
    │
    ▼
View
    │
    ▼
Browser
```

---

# Folder Structure

```
app/
│
├── Controllers/
├── Core/
├── Models/
├── Views/
│
config/
│
public/
│
routes/
│
storage/
│
vendor/
```

---

# Core Components

## Application

Responsibilities

- Bootstrap framework
- Load Environment
- Create Database Connection
- Initialize Router
- Register Routes
- Start Request Lifecycle

---

## Router

Responsibilities

- Register Routes
- Detect HTTP Method
- Detect URI
- Match Route
- Dispatch Controller

---

## Controller

Responsibilities

- Receive Request
- Process Business Logic
- Call Models
- Return View

---

## View

Responsibilities

- Render HTML
- Display Data

---

## Helper

Responsibilities

- view()
- redirect()
- dd()
- config()
- env()

---

# Design Philosophy

One Class

One Responsibility

No Magic

Readable Code

Minimal Dependencies

Framework should be understandable by reading the source code.

---

# Current Status

✔ Bootstrap

✔ Router

✔ Controller

✔ View

✔ Helpers

---

Next Target

Layout Engine