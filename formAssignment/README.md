# Ostad-Module-Five-Assignment

## Requirements

- Registration
    - Validation
        - User Name Unique
        - Email is Unique
        - All fields are required
        - Password and Confirm Password have to match
- Login
    - Validation
        - Username and Password fields are required
        - Username and Password have to matched with Registered username and password
- Mange Roles
    - Validation
        - Role Name also unique
        - Permission to manage role to Admin (role) user

## Features
- Register (As User)
- Login
- Mange Users
    - User List
    - User Edit
    - User Delete (Only access Admin Role)
    - Registered User Can Update User with changing Role
    - Role Comes form Role JSON file dynamically
- Manage Role
    - Only Access Admin User
    - Role List
    - Edit Role
    - Role Name is Unique
    - Delete Role
- Optional
    - Success Message
    - Warning Message (Permission)
    - Unique Message
    - Wrong User password warning
    - Username or Email Unique warning

## How to install
> git clone https://gitlab.com/ahsanullah716/ostad-module-five-assignment.git

## Use Technology
- PHP OOP Technology 
- Data
    - JSON file
        - userList.json
        - role.json
