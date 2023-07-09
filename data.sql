Table `users`
- id int pk increasement
- username varchar
- password varchar
- display_name varchar
- email varchar
- phone varchar
- created_at timestamp
- updated_at timestamp
Table `categories`
- id int pk increasement
- name varchar
- parent_id int null
- created_at timestamp
- updated_at timestamp
Table `posts`
- id int pk increasement
- name varchar
- content text
- user_id int fk `users`
- category_id int fk `categories`
- created_at timestamp
- updated_at timestamp
Table `comments`
- id int pk increasement
- name varchar
- email varchar
- content varchar
- post_id int fk `posts`
- created_at timestamp
- updated_at timestamp
