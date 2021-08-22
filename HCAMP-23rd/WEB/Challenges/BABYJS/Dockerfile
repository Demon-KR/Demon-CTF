FROM node:16-alpine3.11
WORKDIR /app

COPY ./app /app
RUN npm install --no-bin-links

EXPOSE 3000
CMD ["npm", "start"]