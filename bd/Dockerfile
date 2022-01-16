FROM mysql:5.7.33

ADD ./mysql/initialScript.sql /docker-entrypoint-initdb.d

CMD ["--group_concat_max_len=3072", "--interactive-timeout=120", "--wait-timeout=120", "--character-set-server=utf8mb4", "--collation-server=utf8mb4_spanish_ci", "--skip-character-set-client-handshake", "--max_allowed_packet=512M"]
