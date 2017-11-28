CREATE TABLE login_info (
    user_name VARCHAR(32) NOT NULL,
    user_pass VARCHAR(32) NOT NULL,
    -- PRIMARY KEY (user_id)
)

INSERT INTO login_info VALUES (1, 'foobar', 'password');
