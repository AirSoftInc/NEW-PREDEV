CREATE VIEW get_user_info AS 
SELECT u.id, u.name, u.last_name, u.surname, u.email, u.user_type, u.status, ai.rfc, ai.telephone, ai.address, ai.zip_code, ai.municipality
FROM users u, user_aditional_info ai

SELECT * FROM get_user_info;

