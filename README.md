# Manager Library — Utility Seeding Tool

This repository houses the internal utilities for *Manager Library*, specifically focusing on the demonstration database seeder designed to interact with the schema layout.

##  Core SDD Architectural Decisions

Translated directly to match the newly adopted PHP/Laravel framework architecture, this utility script enforces strict business model states:

### 1. Controlled Demonstration Data Insertion
- **Fixed Read-Only Seed Data:** Automatically pre-populates the database with the exact classification of five fixed categories mandated in `data-model.md` (`Science Fiction`, `Fantasy`, `History`, `Biography`, `Technology`), bypassing standard maintenance pipelines.
- **Role Alignment Validation:** Seeds core internal user accounts matching legitimate operational access flags (`admin` and `librarian`) to clear authentication channels.
- **Physical Copy Boundary Checks:** Inserts testing book entities with verified inventory counts ensuring the absolute constraint `total_copies >= 1` is strictly met at the database baseline layer.

