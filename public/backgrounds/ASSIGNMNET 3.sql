
Rem	****** create table BOOK ******
CREATE TABLE BOOK (
    B_ISBN VARCHAR(25) NOT NULL PRIMARY KEY,
    B_TITLE VARCHAR(255) NOT NULL,
    B_AUTHOR_LNAME VARCHAR(25) NOT NULL,
    B_AUTHOR_FNAME VARCHAR(25) NOT NULL
);


Rem	****** create table SUBJECT ******
CREATE TABLE SUBJECT (
    S_ID INT NOT NULL PRIMARY KEY,
    S_DESCRIPTION VARCHAR(50) NOT NULL
);


Rem	****** create table BOOKSUBJECTS ******
CREATE TABLE BOOKSUBJECTS (
    B_ISBN VARCHAR(25) NOT NULL,
    S_ID INT NOT NULL,
    PRIMARY KEY (B_ISBN, S_ID),
    FOREIGN KEY (B_ISBN) REFERENCES BOOK (B_ISBN),
    FOREIGN KEY (S_ID) REFERENCES SUBJECT (S_ID)
);


Rem	****** create table MEMBER ******
CREATE TABLE MEMBER (
    M_ID INT NOT NULL PRIMARY KEY,
    M_LNAME VARCHAR(25) NOT NULL,
    M_FNAME VARCHAR(25) NOT NULL,
    M_PHONE VARCHAR(25) NOT NULL,
    M_RENEWAL DATE NOT NULL,
    M_FINES DECIMAL(15, 2)
);


Rem	****** create table CARD ******
CREATE TABLE CARD (
    M_ID INT NOT NULL,
    B_ISBN VARCHAR(25) NOT NULL,
    C_DUEDATE DATE NOT NULL,
    C_RETURNEDDATE DATE,
    PRIMARY KEY (M_ID, B_ISBN, C_DUEDATE),
    FOREIGN KEY (M_ID) REFERENCES MEMBER (M_ID),
    FOREIGN KEY (B_ISBN) REFERENCES BOOK (B_ISBN)
);


-- Inserting into MEMBER table
INSERT INTO MEMBER VALUES 
(100, 'Graham', 'Stephen', '(403)320-3202', TO_DATE('15 March 2016', 'DD Month YYYY'), NULL);

INSERT INTO MEMBER
VALUES (101, 'Robinson', 'Barry', '(403)320-3203', TO_DATE('23 June 2015', 'DD Month YYYY'), NULL);

INSERT INTO MEMBER
VALUES (102, 'Mazidi', 'Shoja', '(403)320-3204', TO_DATE('01 December 2015', 'DD Month YYYY'), NULL);

INSERT INTO MEMBER 
VALUES (103, 'Allred', 'Terry', '(403)320-3549', TO_DATE('15 Feb 2016', 'DD Month YYYY'), NULL);

-- Inserting into BOOK table
INSERT INTO BOOK
VALUES ('978-1-285-19614-5', 'Database Systems', 'Cornel', 'Carlos');

INSERT INTO BOOK
VALUES ('978-1-118-05762-9', 'Systems Analysis & Design', 'Dennis', 'Alan');

INSERT INTO BOOK
VALUES ('978-0-13-294326-0', 'Database Systems', 'Connolly', 'Thomas');

INSERT INTO BOOK
VALUES ('978-1-55615-650-2', 'Debugging the Development Process', 'Maguire', 'Steve');

-- Inserting into SUBJECTS table
INSERT INTO SUBJECT
VALUES (1, 'Database design');

INSERT INTO SUBJECT
VALUES (2, 'Systems analysis');

INSERT INTO SUBJECT
VALUES (3, 'Systems design');

INSERT INTO SUBJECT
VALUES (4, 'Debugging in computer science');

INSERT INTO SUBJECT
VALUES (5, 'Computer software – development');

INSERT INTO SUBJECT
VALUES (6, 'Computer architecture');

INSERT INTO SUBJECT
VALUES (7, 'Database management');

-- Inserting into BOOKSUBJECTS table
INSERT INTO BOOKSUBJECTS
VALUES ('978-1-285-19614-5', 1);

INSERT INTO BOOKSUBJECTS
VALUES ('978-1-285-19614-5', 7);

INSERT INTO BOOKSUBJECTS
VALUES ('978-1-118-05762-9', 2);

INSERT INTO BOOKSUBJECTS
VALUES ('978-1-118-05762-9', 3);

INSERT INTO BOOKSUBJECTS
VALUES ('978-0-13-294326-0', 1);

INSERT INTO BOOKSUBJECTS
VALUES ('978-0-13-294326-0', 7);

INSERT INTO BOOKSUBJECTS
VALUES ('978-0-13-294326-0', 6);

INSERT INTO BOOKSUBJECTS
VALUES ('978-1-55615-650-2', 4);

INSERT INTO BOOKSUBJECTS
VALUES ('978-1-55615-650-2', 5);

-- Inserting into CARDS table
INSERT INTO CARD 
VALUES (100, '978-1-285-19614-5', TO_DATE('15-Mar-2015', 'DD-Mon-YYYY'), TO_DATE('15-Mar-2015', 'DD-Mon-YYYY'));

INSERT INTO CARD 
VALUES (100, '978-1-118-05762-9', TO_DATE('15-Mar-2015', 'DD-Mon-YYYY'), NULL);

INSERT INTO CARD 
VALUES (100, '978-0-13-294326-0', TO_DATE('01-Mar-2015', 'DD-Mon-YYYY'), TO_DATE('15-Mar-2015', 'DD-Mon-YYYY'));

INSERT INTO CARD 
VALUES (102, '978-1-55615-650-2', TO_DATE('01-Mar-2015', 'DD-Mon-YYYY'), TO_DATE('26-Feb-2015', 'DD-Mon-YYYY'));

INSERT INTO CARD 
VALUES (102, '978-1-285-19614-5', TO_DATE('15-Jun-2014', 'DD-Mon-YYYY'), TO_DATE('20-Jun-2014', 'DD-Mon-YYYY'));

INSERT INTO CARD 
VALUES (103, '978-1-118-05762-9', TO_DATE('6-Sep-2014', 'DD-Mon-YYYY'), TO_DATE('6-Sep-2014', 'DD-Mon-YYYY'));

INSERT INTO CARD 
VALUES (100, '978-0-13-294326-0', TO_DATE('01-Mar-2014', 'DD-Mon-YYYY'), TO_DATE('01-Mar-2014', 'DD-Mon-YYYY'));

INSERT INTO CARD 
VALUES (101, '978-1-55615-650-2', TO_DATE('01-Apr-2015', 'DD-Mon-YYYY'), NULL);


-- Create a view that shows which books are currently checked out and to whom

CREATE VIEW CheckedOutBooks AS
SELECT c.B_ISBN, b.B_TITLE AS BookTitle, m.M_LNAME || ', ' || m.M_FNAME AS MemberName, c.C_DUEDATE, c.C_RETURNEDDATE
FROM CARD c
JOIN MEMBER m ON c.M_ID = m.M_ID
JOIN BOOK b ON c.B_ISBN = b.B_ISBN
WHERE c.C_RETURNEDDATE IS NULL;

-- Create a view that shows how many books each user has that is overdue.

CREATE VIEW UserOverdueBooksCount AS
SELECT m.M_ID, m.M_LNAME || ', ' || m.M_FNAME AS MemberName, COUNT(*) AS OverdueBookCount
FROM CARD c
JOIN MEMBER m ON c.M_ID = m.M_ID
JOIN BOOK b ON c.B_ISBN = b.B_ISBN
WHERE c.C_RETURNEDDATE IS NULL
AND c.C_DUEDATE < TRUNC(SYSDATE)
GROUP BY m.M_ID, m.M_LNAME, m.M_FNAME;

-- Assume that overdue fines are $0.75 per day. Write a query to display how much any one
-- person with overdue books owes.

SELECT 
    m.M_ID,
    m.M_LNAME || ', ' || m.M_FNAME AS MemberName,
    SUM(0.75 * (TRUNC(SYSDATE) - c.C_DUEDATE)) AS TotalOverdueFines
FROM CARD c
JOIN MEMBER m ON c.M_ID = m.M_ID
WHERE c.C_RETURNEDDATE IS NULL
AND c.C_DUEDATE < TRUNC(SYSDATE)
GROUP BY m.M_ID, m.M_LNAME, m.M_FNAME;

-- Update the member record for one selected member to set their m_fines value.

UPDATE MEMBER
SET M_FINES = 10.50
WHERE M_ID = 100;