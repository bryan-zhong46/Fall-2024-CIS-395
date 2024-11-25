-- CREATE TABLE Clients (
-- clientNo VARCHAR(4),
-- name VARCHAR(30),
-- sex VARCHAR(10),
-- age INTEGER,
-- email VARCHAR(50),
-- PRIMARY KEY (clientNo));


-- INSERT INTO Clients VALUES('C201','Kewon Song','Male','36','ksong@gmail.com');
-- INSERT INTO Clients VALUES('C202','Frank Mancione','Male','14','fmancione@hotmail.com');
-- INSERT INTO Clients VALUES('C203','Angela Peterkin','Female','66','angela@gmail.com');
-- INSERT INTO Clients VALUES('C204','Stephanie Johnson','Female','16','sjohnson@gmail.com');
-- INSERT INTO Clients VALUES('C205','Rafael Bah','Male','17','rbah@yahoo.com');
-- INSERT INTO Clients VALUES('C206','Leisa Aras','Female','49','laras@yahoo.com');
-- INSERT INTO Clients VALUES('C207','Robert Salsberry','Male','55','rsalsberry@hotmail.com');
-- INSERT INTO Clients VALUES('C208','Alfina Chanti','Female','24','achanti@hotmail.com');
-- INSERT INTO Clients VALUES('C209','Connie Profaci','Female','32','cprofaci@yahoo.com');
-- INSERT INTO Clients VALUES('C210','Steven Plac','Male','17','steven@yahoo.com');
-- INSERT INTO Clients VALUES('C211','Cindy Lyon','Female','20','cindy.lyon@hotmail.com');
-- INSERT INTO Clients VALUES('C212','Nicole Gary','Female','26','ngary@gmail.com');

CREATE TABLE Users (
userId VARCHAR(4),
name VARCHAR(30),
major VARCHAR(30),
email VARCHAR(50),
phoneNo VARCHAR(10),
PRIMARY KEY (userId));

INSERT INTO Users VALUES('U01','Kewon Song','English','ksong@gmail.com','123456789');
INSERT INTO Users VALUES('U02','Frank Mancione','History','fmancione@hotmail.com','123456789');
INSERT INTO Users VALUES('U03','Angela Peterkin','Mathematics','angela@gmail.com','123456789');
INSERT INTO Users VALUES('U04','Stephanie Johnson','Biology','sjohnson@gmail.com','123456789');
INSERT INTO Users VALUES('U05','Rafael Bah','Chemistry','rbah@yahoo.com','123456789');
INSERT INTO Users VALUES('U06','Leisa Aras','Physics','laras@yahoo.com','123456789');
INSERT INTO Users VALUES('U07','Robert Salsberry','Spanish','rsalsberry@hotmail.com','123456789');
INSERT INTO Users VALUES('U08','Alfina Chanti','Political Science','achanti@hotmail.com','123456789');
INSERT INTO Users VALUES('U09','Connie Profaci','Computer Science','cprofaci@yahoo.com','123456789');
INSERT INTO Users VALUES('U10','Steven Plac','Computer Information Systems','steven@yahoo.com','123456789');
INSERT INTO Users VALUES('U11','Cindy Lyon','Art','cindy.lyon@hotmail.com','123456789');
INSERT INTO Users VALUES('U12','Nicole Gary','Music','ngary@gmail.com','123456789');

CREATE TABLE BooksForSale (
    bookNo INTEGER NOT NULL,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(30),
    edition INTEGER,
    course VARCHAR(7),
    price DECIMAL(5,2),
    userId VARCHAR(4) NOT NULL,
    PRIMARY KEY (bookNo),
    FOREIGN KEY (userId) REFERENCES Users ON DELETE CASCADE ON UPDATE CASCADE);

INSERT INTO BooksForSale VALUES('B01','Database Systems: A Practical Approach to Design, Implementation and Management','Connolly, Begg',6,'CIS 395',100.00,'U01');
INSERT INTO BooksForSale VALUES('B02','Programming the World Wide Web','Sebesta',8,'CIS 385',100.00,'U02');
INSERT INTO BooksForSale VALUES('B03','Starting Out With Java: From Control Structures through Objects','Gaddis',8,'CIS 210',100.00,'U03');

CREATE TABLE Requests (
    requestNo INTEGER NOT NULL,
    title VARCHAR(100) NOT NULL,
    author VARCHAR(30),
    edition INTEGER,
    course VARCHAR(7),
    userId VARCHAR(4) NOT NULL,
    PRIMARY KEY (requestNo),
    FOREIGN KEY (userId) REFERENCES Users ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO Requests VALUES('R01','Database Systems: A Practical Approach to Design, Implementation and Management','Connolly, Begg',6,'CIS 395','U01');