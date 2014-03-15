CREATE TABLE submissions (
	id INTEGER UNSIGNED PRIMARY KEY UNIQUE,
	first_name TEXT NOT NULL,
	last_name TEXT NOT NULL,
	title TEXT NOT NULL,
	company_id INTEGER NOT NULL
	info_id INTEGER NOT NULL,
	date_id INTEGER NOT NULL,
	FOREIGN KEY(company_id) REFERENCES companies(id),
	FOREIGN KEY(info_id) REFERENCES infos(id),
	FOREIGN KEY(date_id) REFERENCES dates(id)
);

CREATE TABLE companies (
	id INTEGER UNSIGNED PRIMARY KEY UNIQUE,
	company_name TEXT NOT NULL,
	company_size TEXT NOT NULL,
	phone TEXT NOT NULL,
	email TEXT NOT NULL
	site TEXT,
	address_id INTEGER NOT NULL,
	detail_id INTEGER NOT NULL,
	site_id INTEGER, NOT NULL,
	FOREIGN KEY(address_id) REFERENCES addresses(id),
	FOREIGN KEY(details_id) REFERENCES details(id),
	FOREIGN KEY(site_id) REFERENCES sites(id)
);

CREATE TABLE addresses (
	id INTEGER UNSIGNED PRIMARY KEY UNIQUE,
	address_1 TEXT,
	address_2 TEXT,
	city TEXT,
	state TEXT,
	country TEXT,
	zipcode INTEGER,
);

CREATE TABLE details (
	id INTEGER UNSIGNED PRIMARY KEY UNIQUE,
	paragraph TEXT
);

CREATE TABLE infos (
	id INTEGER UNSIGNED PRIMARY KEY UNIQUE,
	exec_coahing BIT NOT NULL,
	team_develop BIT NOT NULL,
	more_other BIT NOT NULL,
	c_suite BIT NOT NULL,
	hr_rep BIT NOT NULL,
	position BIT NOT NULL
);

CREATE TABLE dates (
	id INTEGER UNSIGNED PRIMARY KEY UNIQUE,
	stamp TIMESTAMP NOT NULL,
);