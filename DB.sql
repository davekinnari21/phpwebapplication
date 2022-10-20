/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  kdave
 * Created: Oct 19, 2022
 */

DROP DATABASE IF EXISTS sample;

CREATE DATABASE sample;

USE sample;

CREATE TABLE company (
  companyid int NOT NULL auto_increment,
  name varchar(255) ,
  address varchar(255) ,
  city varchar(255) ,
  state varchar(255) ,
  zip varchar(30) ,
  country varchar(255) ,
  PRIMARY KEY (companyid)
);

CREATE TABLE employee (
  employeeid int NOT NULL PRIMARY KEY auto_increment,
  firstname varchar(255) ,
  lastname varchar(255) ,
  hiredate date,
  email varchar(100) ,
  phone varchar(100) ,
  title varchar(255) ,
  companyid int
);

INSERT INTO company (companyid, name, address, city, state, zip, country) VALUES (1, "Tanaka Takuya", "3-15-12 Ginza, Chuo-ku", "Tokyo", "8Z8VJMW3Sz", "YiGLWUKEiA", "Japan");
INSERT INTO company (companyid, name, address, city, state, zip, country) VALUES (3, "Ruth Richardson", "644 Central Avenue", "Albany", "M6u8Ksxtov", "kpPwbAAqlM", "United States");
INSERT INTO company (companyid, name, address, city, state, zip, country) VALUES (4, "Tony Gonzales", "566 Regent Street", "London", "YcTLAecaAD", "4bFmKX4hkG", "United Kingdom");
INSERT INTO company (companyid, name, address, city, state, zip, country) VALUES (5, "Douglas Cole", "779 West Houston Street", "New York", "tjBVevtA5Q", "Zq4TYbTr7f", "United States");
INSERT INTO company (companyid, name, address, city, state, zip, country) VALUES (6, "Duan Zitao", "1-5-17, Higashi-Shimbashi, Minato-ku", "Tokyo", "PAVRXzS1av", "NjYnPcKq2q", "Japan");
INSERT INTO company (companyid, name, address, city, state, zip, country) VALUES (7, "Andrea Tucker", "648 Riverview Road", "Akron", "TWaCBZxpoz", "FJWmzgXtQ2", "United States");


INSERT INTO employee (employeeid, firstname, lastname,  hiredate, email, phone, title, companyid) VALUES (1, "Liao Kwok Kuen", "Liao Kwok Kuen",  "2012-09-03", "liaokwokkuen1@mail.com", "7270 543723", "Mrs.", 1);
INSERT INTO employee (employeeid, firstname, lastname,  hiredate, email, phone, title, companyid) VALUES (2, "Morita Daichi", "Morita Daichi",  "2016-12-13", "daichm8@outlook.com", "(20) 7663 7782", "Prof.", 1);
INSERT INTO employee (employeeid, firstname, lastname,  hiredate, email, phone, title, companyid) VALUES (3, "Zhu Lan", "Zhu Lan",  "2000-04-21", "zhu86@icloud.com", "11-297-2176", "Miss.", 2);
INSERT INTO employee (employeeid, firstname, lastname,  hiredate, email, phone, title, companyid) VALUES (4, "Shi Yunxi", "Shi Yunxi",  "2012-01-23", "yunshi918@mail.com", "330-364-7523", "Prof.", 3);
INSERT INTO employee (employeeid, firstname, lastname,  hiredate, email, phone, title, companyid) VALUES (5, "Debra Cruz", "Debra Cruz",  "2015-04-20", "cruzdeb@yahoo.com", "213-962-2068", "Miss.", 2);
