# Scar Confidence Digital Platform | Software Development Project Plan

Welcome to the official project repository for the **Scar Confidence Digital Platform**. This project is being developed as part of our software development class project.

## 1. Project Overview

**Scar Confidence** is an established medical makeup company that has operated successfully for a year, primarily partnering with hospitals and the medical sector. Up to this point, they have relied entirely on word-of-mouth and industry links without a dedicated website, social media presence, or formal advertising.

The goal of this project is to build their digital presence, allowing them to expand globally and reach a wider audience across multiple industries.

### Key Project Objectives

- **Branding & Logo:** Design a clean logo and a modest, ethical website that reflects genuine values rather than a glossy, sales-driven approach.
- **Directory Database:** Build a simple directory system (similar to a digital phone directory) storing company names, addresses, and two primary contact points.
- **Payment Handling:** Keep all financial transactions entirely off our server by securely linking out to trusted third-party payment providers.
- **Secure Server Infrastructure:** Set up and secure a virtual machine in an ESXi environment, featuring robust network controls, firewalls, and scheduled backup procedures.

---

## 2. Team Structure & Task Responsibilities

| Project Area | Team Members | Main Responsibilities |
|---|---|---|
| **Software Development** | Reuben & Ini | Site layout, wireframes, logo design, database schema, website build, version control, accessibility, and browser testing. |
| **Joint Tasks** | All Members | Reading the brief, agreeing on requirements/project plan, writing the interface agreement, deploying the site, and running User Acceptance Testing (UAT). |

---

## 3. Requirements Specification

### Functional Requirements

*What the system must do.*

1. **Ethical Frontend Website:**  
   A simple, multi-page website providing clear information about services and company values.

2. **Logo Design:**  
   A clean, understated logo suitable for both medical and non-medical business clients.

3. **Company Directory:**  
   A database-backed frontend directory displaying:
    - Company Name
    - Address
    - Primary Contact (Name, Email, Phone)
    - Secondary Contact (Name, Email, Phone)

4. **Directory Search:**  
   Basic search and filter functionality to help users quickly find listed companies.

5. **External Payment Hand-off:**  
   Redirection or links to external payment services (e.g., Stripe or PayPal) so no card details are handled or saved locally.

### Non-Functional Requirements

*How the system should perform.*

1. **Security:**  
   No payment data stored on local servers. Server access strictly restricted by user permissions and firewalls.  
   *Tested using security scripts and Metasploit.*

2. **Accessibility:**  
   WCAG 2.1 AA compliant, including support for screen readers, high-contrast modes, and keyboard navigation.

3. **Cross-Browser & Mobile Support:**  
   Works smoothly across Chrome, Firefox, Safari, and various mobile screen sizes.

4. **Version Control:**  
   All code changes tracked using **Git** with clear, descriptive commit messages.

5. **Data Protection & Recovery:**  
   Scheduled database backups thoroughly tested with full restore routines.

---

## 4. Tech Stack & Justification

- **Frontend:** HTML5, CSS3, and JavaScript
    - *Justification:* Keeps the site lightweight, fast-loading, highly accessible, and easy to maintain without heavy framework overhead.

- **Backend:** PHP
    - *Justification:* Simple to set up, highly secure, and well-suited for running a lightweight directory application.

- **Database:** MySQL
    - *Justification:* Fits the fixed directory layout (Company + 2 Contacts) perfectly.

---

## 5. Phase-by-Phase Timeline

### Phase 1 – Plan

- Read and analyze the client brief.
- Draft and agree upon functional and non-functional requirements.
- Establish the project plan, Gantt chart, and task distribution.

### Phase 2 – Design

- Design the site map, wireframes, database schema, and logo options (Software team).
- Draft and sign the Interface Agreement defining how Software and Support will hand over the server environment.

### Phase 3 – Implement

- Build the website and database using Git version control to track all changes.
- Configure network segments and server firewall rules.
- Jointly deploy the website onto the support server environment.

### Phase 4 – Test

- Execute functional checks, cross-browser tests, and screen-reader accessibility tests.
- Perform basic security penetration checks, port scans, and account permission audits.
- Conduct full backup and database restore tests.
- Complete User Acceptance Testing (UAT) jointly against the project brief.

### Phase 5 – Reflect

- Write individual reflections comparing initial plans against actual deliverables.
- Identify risks, technical changes made, and lessons learned for future projects.

---

## 6. Risk Assessment

| Risk Description | Impact | Likelihood | Mitigation Strategy | Assigned Owner |
|---|---|---|---|---|
| **Card Data Security Vulnerability** | High | Low | Hand off all payments to external payment links. Do not process or save card details on our local server. | Reuben & Ini |
| **Deployment Issues (Environment Mismatch)** | High | Medium | Create a clear Interface Agreement early on so runtime versions and database settings match seamlessly. | Joint |

---

### Project Notes for developers are in:
```Project-Notes.md```