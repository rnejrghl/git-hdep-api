FROM openjdk:8-jdk-alpine
ARG JAR_FILE=build/libs/api-1.0-SNAPSHOT.jar
COPY ${JAR_FILE} app.jar
VOLUME /tmp
EXPOSE 8080

ARG SPRING_PROFILES_ACTIVE
ENV SPRING_PROFILES_ACTIVE=$SPRING_PROFILES_ACTIVE

ENTRYPOINT ["java","-Djava.security.egd=file:/dev/./urandom","-jar","/app.jar"]
