FROM postgres
ENV POSTGRES_DB my_database
COPY ./docker/postgres/dump.sql  /docker-entrypoint-initdb.d/
